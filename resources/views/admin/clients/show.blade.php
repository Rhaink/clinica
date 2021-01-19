@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.client.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.id') }}
                        </th>
                        <td>
                            {{ $client->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.name') }}
                        </th>
                        <td>
                            {{ $client->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.phone') }}
                        </th>
                        <td>
                            {{ $client->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.email') }}
                        </th>
                        <td>
                            {{ $client->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.matricula') }}
                        </th>
                        <td>
                            {{ $client->matricula }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.gender') }}
                        </th>
                        <td>
                            {{ $client->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.edad') }}
                        </th>
                        <td>
                            {{ $client->edad }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.sala') }}
                        </th>
                        <td>
                            {{ $client->sala }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.religion') }}
                        </th>
                        <td>
                            {{ $client->religion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.ocupacion') }}
                        </th>
                        <td>
                            {{ $client->ocupacion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.estadocivil') }}
                        </th>
                        <td>
                            {{ $client->estadocivil }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.medicotratante') }}
                        </th>
                        <td>
                            {{ $client->medicotratante }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.originariode') }}
                        </th>
                        <td>
                            {{ $client->originariode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.radicaen') }}
                        </th>
                        <td>
                            {{ $client->radicaen }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.escolaridad') }}
                        </th>
                        <td>
                            {{ $client->escolaridad }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.municipales') }}
                        </th>
                        <td>
                            {{ $client->municipales }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.habitacion') }}
                        </th>
                        <td>
                            {{ $client->habitacion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.tabaquismo') }}
                        </th>
                        <td>
                            {{ $client->tabaquismo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.etilismo') }}
                        </th>
                        <td>
                            {{ $client->etilismo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.higiene') }}
                        </th>
                        <td>
                            {{ $client->higiene }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.alimentacion') }}
                        </th>
                        <td>
                            {{ $client->alimentacion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.dominio') }}
                        </th>
                        <td>
                            {{ $client->dominio }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.hijos') }}
                        </th>
                        <td>
                            {{ $client->hijos }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.pasatiempo') }}
                        </th>
                        <td>
                            {{ $client->pasatiempo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.client.fields.otros') }}
                        </th>
                        <td>
                            {{ $client->otros }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection
