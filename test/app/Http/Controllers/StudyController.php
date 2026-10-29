<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudyController extends Controller
{
    public function index(): View
    {
        return view('about', [
            'studies' => Study::orderBy('study')->get(),
            'editingStudy' => null,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Study::create($this->validatedData($request));

        return to_route('about')->with('status', 'Study added successfully.');
    }

    public function edit(Study $study): View
    {
        return view('about', [
            'studies' => Study::orderBy('study')->get(),
            'editingStudy' => $study,
        ]);
    }

    public function update(Request $request, Study $study): RedirectResponse
    {
        $study->update($this->validatedData($request));

        return to_route('about')->with('status', 'Study updated successfully.');
    }

    public function destroy(Study $study): RedirectResponse
    {
        $study->delete();

        return to_route('about')->with('status', 'Study deleted successfully.');
    }

    /**
     * @return array{study: string, institution: string, semester: string}
     */
    private function validatedData(Request $request): array
    {
        return $request->validate([
            'study' => ['required', 'string', 'max:150'],
            'institution' => ['required', 'string', 'max:150'],
            'semester' => ['required', 'string', 'max:100'],
        ]);
    }
}
