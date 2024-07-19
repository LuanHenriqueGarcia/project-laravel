
<h3>Fornecedor teste</h3>

@php 
 /*
    if(){

    }
 */   
@endphp    




@isset($Fornecedores)
    Fornecedor: {{ $Fornecedores[0]['nome']}}
    <br />
    Status: {{ $Fornecedores[0]['status']}}
    <br />
    CNPJ: {{ $Fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido'}}
    <br /> 
    Telefone: ( {{ $Fornecedores[0]['ddd'] ?? 'Dado não foi '}} {{ $Fornecedores[0]['telefone'] ?? 'Dado não foi preenchido'}})
    @switch($Fornecedores[0]['ddd'])
      @case ('11')
         São Paulo - SP
         @break
      @case ('44')
         Paraná - PR
         @break
      @case ('85')
         Fortaleza - CE
         @break
         @default
            Estado não identificado
    @endswitch
@endisset