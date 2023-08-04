<?php

namespace App\DataTables;

use App\Models\Certificado;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CertificadoDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->addColumn('action', function($t){
            return view('certificados.action',['t'=>$t]);
        })
        ->editColumn('archivo',function($t){
            return view('certificados.archivo',['t'=>$t]);
        })
        ->editColumn(' created_at',function($t){
            return $t->created_at;
        })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Certificado $model): QueryBuilder
    {
        return $model->newQuery()->where('user_id',Auth::id())->latest();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('certificado-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
                  Column::make('nombre'),
                  Column::make('created_at')->title('Fecha'),
                  Column::make('archivo')->searchable(false),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Certificado_' . date('YmdHis');
    }
}
