@extends('layouts.secundario')

@section('titulo', 'Licenciaturas - FCA UADY')

@section('contenido')
    <h1 style="color: #1b365d; border-bottom: 3px solid #cda043; padding-bottom: 10px;">Programas de Licenciatura</h1>
    <p>Formamos profesionales líderes con valores éticos y visión global.</p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
        <div style="border-left: 5px solid var(--dorado-uady); padding-left: 15px;">
            <h3 style="margin: 0;">Contador Público</h3>
        </div>
        <div style="border-left: 5px solid var(--dorado-uady); padding-left: 15px;">
            <h3 style="margin: 0;">Administración</h3>
        </div>
        <div style="border-left: 5px solid var(--dorado-uady); padding-left: 15px;">
            <h3 style="margin: 0;">Mercadotecnia</h3>
        </div>
        <div style="border-left: 5px solid var(--dorado-uady); padding-left: 15px;">
            <h3 style="margin: 0;">Negocios Internacionales</h3>
        </div>
    </div>
@endsection