<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClientRequest;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Client::query()->select(sprintf('%s.*', (new Client)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'client_show';
                $editGate      = 'client_edit';
                $deleteGate    = 'client_delete';
                $crudRoutePart = 'clients';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : "";
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            $table->editColumn('matricula', function ($row) {
                return $row->matricula ? $row->matricula : "";
            });
            $table->editColumn('gender', function ($row) {
                return $row->gender ? $row->gender : "";
            });
            $table->editColumn('edad', function ($row) {
                return $row->edad ? $row->edad : "";
            });
            $table->editColumn('sala', function ($row) {
                return $row->sala ? $row->sala : "";
            });
            $table->editColumn('religion', function ($row) {
                return $row->religion ? $row->religion : "";
            });
            $table->editColumn('ocupacion', function ($row) {
                return $row->ocupacion ? $row->ocupacion : "";
            });
            $table->editColumn('estadocivil', function ($row) {
                return $row->estadocivil ? $row->estadocivil : "";
            });
            $table->editColumn('medicotratante', function ($row) {
                return $row->medicotratante ? $row->medicotratante : "";
            });
            $table->editColumn('originariode', function ($row) {
                return $row->originariode ? $row->originariode : "";
            });
            $table->editColumn('radicaen', function ($row) {
                return $row->radicaen ? $row->radicaen : "";
            });
            $table->editColumn('escolaridad', function ($row) {
                return $row->escolaridad ? $row->escolaridad : "";
            });
            $table->editColumn('municipales', function ($row) {
                return $row->municipales ? $row->municipales : "";
            });
            $table->editColumn('habitacion', function ($row) {
                return $row->habitacion ? $row->habitacion : "";
            });
            $table->editColumn('tabaquismo', function ($row) {
                return $row->tabaquismo ? $row->tabaquismo : "";
            });
            $table->editColumn('etilismo', function ($row) {
                return $row->etilismo ? $row->etilismo : "";
            });
            $table->editColumn('higiene', function ($row) {
                return $row->higiene ? $row->higiene : "";
            });
            $table->editColumn('alimentacion', function ($row) {
                return $row->alimentacion ? $row->alimentacion : "";
            });
            $table->editColumn('dominio', function ($row) {
                return $row->dominio ? $row->dominio : "";
            });
            $table->editColumn('hijos', function ($row) {
                return $row->hijos ? $row->hijos : "";
            });
            $table->editColumn('pasatiempo', function ($row) {
                return $row->pasatiempo ? $row->pasatiempo : "";
            });
            $table->editColumn('otros', function ($row) {
                return $row->otros ? $row->otros : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.clients.index');
    }

    public function create()
    {
        abort_if(Gate::denies('client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        $client = Client::create($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function edit(Client $client)
    {
        abort_if(Gate::denies('client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.edit', compact('client'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());

        return redirect()->route('admin.clients.index');
    }

    public function show(Client $client)
    {
        abort_if(Gate::denies('client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        abort_if(Gate::denies('client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientRequest $request)
    {
        Client::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
