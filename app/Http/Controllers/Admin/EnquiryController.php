<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EnquiryController extends Controller
{
    public function index(Request $request): View
    {
        $query = Enquiry::latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $enquiries = $query->paginate(15)->withQueryString();
        $statuses = Enquiry::statuses();

        return view('admin.enquiries.index', compact('enquiries', 'statuses'));
    }

    public function show(Enquiry $enquiry): View
    {
        if ($enquiry->status === Enquiry::STATUS_NEW) {
            $enquiry->update(['status' => Enquiry::STATUS_READ]);
        }

        return view('admin.enquiries.show', [
            'enquiry' => $enquiry,
            'statuses' => Enquiry::statuses(),
        ]);
    }

    public function update(Request $request, Enquiry $enquiry): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:'.implode(',', array_keys(Enquiry::statuses()))],
            'admin_notes' => ['nullable', 'string'],
        ]);

        $enquiry->update($data);

        return redirect()->route('admin.enquiries.show', $enquiry)->with('success', 'Enquiry updated.');
    }

    public function destroy(Enquiry $enquiry): RedirectResponse
    {
        $enquiry->delete();

        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry deleted.');
    }
}
