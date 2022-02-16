<h3>Fornecedor</h3>


@php

@endphp

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)

        Iteração: {{$loop -> iteration}}
        <br>
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}   
        <br>
        @if($loop -> first)
            Primeira iteração do loop
        @endif

        @if($loop -> last)
            Ultima iteração do loop

            <br>
            Total de registos: {{$loop -> count}}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse


@endisset


