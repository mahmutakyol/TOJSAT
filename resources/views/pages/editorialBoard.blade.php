@extends('master')

@section('pageHeader')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-right"></span> Editorial Board </h2>
    </div>
@endsection

@section('body')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body posts">
                <div class="post-item">

                    <div class="post-text">
                        <p><strong>Editor-in-Chief</strong></p>

                        <p>{{$title_name}} {{$name}} {{strtoupper($surname)}} - {{ $university }}, {{ $country }} </p>

                        <p><strong>Editors</strong></p>

                        <p>Prof. Dr. Aydın Ziya ÖZGÜR - Anadolu University, Turkey<br>
                        Assoc. Prof. Dr. Ergun YOLCU - Istanbul University, Turkey</p>

                        <p><strong>Associate Editor</strong></p>

                        <p>Assist. Prof. Dr. Seçil KAYA - Anadolu University, Turkey</p>

                        <p><strong>Technical Editor</strong></p>

                        <p>Hüseyin ESKİ - Sakarya University, Turkey</p>

                        <p><strong>Editorial Board</strong></p>

                        <p>Prof. Dr. Aydın Ziya OZGUR, Anadolu University, Turkey<br>
                            Prof. Dr. Aytekin İŞMAN, Sakarya University, Turkey<br>
                            Prof. Dr. Cengiz Hakan AYDIN, Anadolu University, Turkey<br>
                            Prof. Dr. Murat BARKAN, Yasar University, Turkey<br>
                            Assoc. Prof. Dr. Ergun YOLCU, Istanbul University, Turkey<br>
                            Assoc. Prof. Dr. Özlem OĞUZHAN, Sakarya University, Turkey<br>
                            Assist. Prof. Dr. Özgü YOLCU, Istanbul University, Turkey<br>
                            Assist. Prof. Dr. Seçil KAYA, Anadolu University, Turkey<br>
                            Dr. Ahmet KALANDER, Selçuk University, Turkey<br>
                            Dr. Ahmet Bülent GÖKSEL, European University of Lefke, Turkish Republic of Northern Cyprus<br>
                            Dr. Aysun AKINCI YÜKSEL, Anadolu University, Turkey<br>
                            Dr. Aytekin CAN, Selçuk University, Turkey<br>
                            Dr. Bedriye POYRAR, Ankara University, Turkey<br>
                            Dr. Besim. F. DELLALOĞLU, Sakarya University, Turkey<br>
                            Dr. Betül ÇELİK, Ankara University, Turkey<br>
                            Dr. Burcu KAYA ERDEM, Istanbul University, Turkey<br>
                            Dr. Can BİLGİLİ, Istanbul Ticaret University, Turkey<br>
                            Dr. Cengiz ERDAL, Sakarya University, Turkey<br>
                            Dr. Faruk KALKAN, European University of Lefke, Turkish Republic of Northern Cyprus<br>
                            Dr. Gül BATUŞ, Maltepe University, Turkey<br>
                            Dr. Gülüm ŞENER, Arel University, Turkey<br>
                            Dr. Hasan CALISKAN, Anadolu University, Turkey<br>
                            Dr. Hikmet SEÇİM, Cyprus International University, Turkish Republic of Northern Cyprus<br>
                            Dr. Hüseyin KÖSE, Ataturk University, Turkey<br>
                            Dr. Işık ÖZKAN, Yeditepe Univeristy, Turkey<br>
                            Dr. Metin IŞIK, Sakarya University, Turkey<br>
                            Dr. Nazan HAYRADİ PAKKAN, Maltepe University, Turkey<br>
                            Dr. Nejat ULUSOY, Ankara University, Turkey<br>
                            Dr. Neşe KARS, Istanbul University, Turkey<br>
                            Dr. Nezih ORHON, Anadolu University, Turkey<br>
                            Dr. Nilgün ABİSEL, Near East University, Turkey<br>
                            Dr. Nilüfer TİMİSİ, Istanbul University, Turkey<br>
                            Dr. Oğuz ADANIR, Dokuz Eylül University, Turkey<br>
                            Dr. Osman ÜRPER, Maltepe University, Turkey<br>
                            Dr. Şahin KARASAR, Turkish Airlines , Turkey<br>
                            Dr. Sevda ALANKUŞ, İzmir Ticaret University, Turkey</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

