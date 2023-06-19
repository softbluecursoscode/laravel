<HTML>
    <HEAD>
        <TITLE>Produtos</TITLE>
    </HEAD>
    <BODY>
        <H1>Produtos</H1>
        <UL>
            @foreach($produtos as $produto)
            <LI>{{ $produto }}</LI>
            @endforeach
        </UL>
    </BODY>
</HTML>