
<h3>Fornecedor teste</h3>

@php 
 /*
    if(){

    }
 */   
@endphp    





Fornecedor: {{ $Fornecedores[0]['nome']}}
<br />
Status: {{ $Fornecedores[0]['status']}}
<br />
@if(!($Fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif 
<br />
@unless($Fornecedores[0]['status'] == 'S')
  Fornecedor inativo
  @endunless
<br /> 