<HTML>
    <HEAD>
        <TITLE>Cadastro de Produto</TITLE>
    </HEAD>
    <BODY>
        <H1>Cadastro de Produto</H1>
            
        @if (isset($resultado))
        <H2>{{ $resultado }}</H2>
        @endif
        
        <FORM method=POST action="?">
            Descrição: <INPUT type=TEXT name=prodDescricao
            value="@if (isset($request->prodDescricao)){{ $request->prodDescricao }}@endif"
            ><BR>
            
            Valor: <INPUT type=TEXT name=prodValor
            value="@if (isset($request->prodValor)){{ $request->prodValor }}@endif"
            ><BR>
            <INPUT type=SUBMIT value="Cadastrar">
        </FORM>
    </BODY>
</HTML>