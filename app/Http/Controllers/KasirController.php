<?php
//app/Http/Controllers/KasirController;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Kasir;
class KasirController extends Controller
{
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasir.index', compact('kasirs'));
    }

    public function create()
    {
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            // Add other validation rules as needed
        ]);

        Kasir::create($request->all());

        return redirect('/kasir')->with('success', 'Kasir added successfully!');
    }

    public function edit($id)
    {
        $kasir = Kasir::findOrFail($id);
        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            // Add other validation rules as needed
        ]);

        $kasir = Kasir::findOrFail($id);
        $kasir->update($request->all());

        return redirect('/kasir')->with('success', 'Kasir updated successfully!');
    }

    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();

        return redirect('/kasir')->with('success', 'Kasir deleted successfully!');
    }
}
