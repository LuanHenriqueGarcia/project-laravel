<h3>Fornecedor teste</h3>

@php 
 /*
    if(){

    }
 */   
@endphp    

@isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
      Fornecedor: {{ $fornecedores[$i]['nome'] }}
      <br />
      Status: {{ $fornecedores[$i]['status'] }}
      <br />
      CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
      <br /> 
      Telefone: ({{ $fornecedores[$i]['ddd'] ?? 'Dado não foi preenchido' }} {{ $fornecedores[$i]['telefone'] ?? 'Dado não foi preenchido' }})
      <hr>
    @endfor
@endisset
