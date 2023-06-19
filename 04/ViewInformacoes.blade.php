<HTML>
    <HEAD>
        <TITLE>Softblue</TITLE>
    </HEAD>
        <BODY>
            <H1>Informações</H1>
                
            <P>Olá <B>{{ $usuario }}</B>, seus produtos são:</P>
            <UL>
                @foreach ($produtos as $produto)
                    <LI>{{{ $produto }}}</LI>
                @endforeach
            </UL>
                
        </BODY>
</HTML>
