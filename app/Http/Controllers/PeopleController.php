<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    // a. Zwróć wszystkie instancje People przechowywane w bazie
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }

    // b. Zwróć pojedynczą instancję People o żądanym ID
    public function show($id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json(['message' => 'Osoba nie znaleziona'], 404);
        }

        return response()->json($person);
    }

    // c. Aktualizuj pojedynczą instancję People o żądanym ID
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'street' => 'required',
            'city_country' => 'required',
        ]);

        $person = People::find($id);

        if (!$person) {
            return response()->json(['message' => 'Osoba nie znaleziona'], 404);
        }

        $person->update($data);

        return response()->json(['message' => 'Osoba została zaktualizowana', 'data' => $person]);
    }

    // d. Usuń instancję People o żądanym ID
    public function destroy($id)
    {
        $person = People::find($id);

        if (!$person) {
            return response()->json(['message' => 'Osoba nie znaleziona'], 404);
        }

        $person->delete();

        return response()->json(['message' => 'Osoba została usunięta']);
    }

    // e. Stwórz pojedynczą instancję People o kompletnych właściwościach
    public function create(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'street' => 'required',
            'city_country' => 'required',
        ]);

        $person = People::create($data);

        return response()->json(['message' => 'Osoba została dodana', 'data' => $person]);

    }
}
