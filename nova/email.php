<?php session_start(); ?>
<!Doctype Html>
<Html Lang="Cs">
<Head>
<Meta Charset="Utf-8">
<Meta Name="Application-name" Content="Přihláška na VŠ">
<Meta Name="Author" Content="Pavel Dvořák, 8.O">
<Meta Name="Description" Content="Online přihláška ke studiu na vysoké škole vytvořená ke zjednodušení vyplňování, tisku a následném zasílání">
<Meta Name="Keywords" Content="přihláška,VŠ,formuláře,PHP,vysoké školy">
<Meta Name="Robots" Content="Follow,index">
<Meta Name="Viewport" Content="width=device-width">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Style Type="Text/css">
Body{Margin:0;Height:1188mm;Width:210mm}
Div{Height:297mm;Width:210mm}
Table{Background-color:#FDB850;Margin:9.5mm 13.75mm;Padding-top:5mm;Padding-left:1.5mm;Padding-bottom:6mm;Padding-right:1.5mm;Height:278mm;Width:182.5mm}
</Style>
<Title>Přihláška</Title>
</Head>
<Body>
Vážený uchazeči <?php echo $_SESSION["Jmeno"]; ?>,
<Br>
Vámi podaná přihláška na vysokou školu byla úspěšně uložena.
<Br><Br>
Vyplnění nové přihlášky nebo tisk, úprava, či odstranění této přihlášky je možné na webové adrese:
<Br>
<A Href="http://prihlaskanavs.8u.cz/uprava/">http://prihlaskanavs.8u.cz/</A>
<Br><Br>
K přihlášení budete potřebovat Vaše rodné číslo (<?php echo $_SESSION["RCislo"]; ?>) a tento kód:
<Br>
<H2><?php echo session_id(); ?></H2>
<Br><Br>
Tato zpráva byla vygenerována automaticky webovou aplikací Přihláška na VŠ.
<Br>
Na tuto zprávu prosím neodpovídejte.
</Body>
</Html>