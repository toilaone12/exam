@extends('page')
@section('content')
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="exam-detail-block">
                    <h3 class="exam-detail-title">Test 40 - Lesen - Teil 5</h3>
                    <p class="exam-detail-time">Thời lượng: <span class="fw-bolder">10 Phút</span></p>
                    <div class="exam-detail-label">
                        <p>Đọc hiểu</p>
                    </div>
                    <div class="exam-detail-countdown">
                        <ul class="d-flex justify-content-center">
                            <li>
                                <span id="hours" class="exam-detail-number">00</span>
                                <span class="exam-detail-text text-white fs-16">Giờ</span>
                            </li>
                            <li>
                                <span id="minutes" class="exam-detail-number">10</span>
                                <span class="exam-detail-text text-white fs-16">Phút</span>
                            </li>
                            <li>
                                <span id="seconds" class="exam-detail-number">00</span>
                                <span class="exam-detail-text text-white fs-16">Giây</span>
                            </li>
                        </ul>
                    </div>
                    <div class="exam-detail-finish">
                        <a href="" class="exam-detail-button">Hoàn thành</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <h3 class="exam-block-title">Đọc đoạn văn và lựa chọn câu trả lời chính xác!</h3>
                <div class="exam-block-question">
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="exam-block-type">
                            <div class="exam-block-type-name">
                                <a href="#">Câu số 1</a>
                            </div>
                            <div class="d-flex justify-content-between flex-column">
                                <div class="exam-block-type-content">
                                    <h3 class="exam-block-type-title">
                                        <p style="margin-bottom:8.0pt; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">5. Teil 5: </span></span></b><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">(Arbeitszeit: 10 Minuten)<b> </b></span></span></span></span></span></p>

                                        <p style="margin-bottom:8.0pt; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Lesen Sie die Aufgaben 27 bis 30 und den Text dazu. Wählen Sie bei jeder Aufgabe die richtige Lösung a, b, oder c.</span></span></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Sie lesen die Anmeldeinformationen der SommerKinderUni Graz, weil Sie im Programm der Universität interessante Angebote gefunden haben.</span></span></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt">&nbsp;</p>

                                        <p align="center" style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; text-align:center; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-size:20.0pt"><span style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">SommerKinderUni</span></span></span></b></span></span></span></p>

                                        <p align="center" style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; text-align:center; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-size:16.0pt"><span style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Anmeldeinformationen</span></span></span></b></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif">&nbsp;</span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Aufnahme und Anmeldung:</span></span></b></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Die SommerKinder Uni Graz ist für Kinder bzw. Jugendliche im Alter von 9 bis 15 Jahren empfohlen. Anmeldungen beginnen am 22. Juni. Die Anmeldung ist nur für ganze Wochen über die Homepage der KinderUni Graz möglich. Insgesamt werden für die Veranstaltungen (Workshops) bis zu max. 60 Kinder pro Woche aufgenommen.</span></span></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Öffnungszeiten:</span></span></b></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Die SommerKinderUni Graz ist vom 11. Juli bis zum 29. Juli geöffnet. Die Betreuung ist von Montag bis Freitag von 8.00 bis 17.00 Uhr ganztags möglich. Erster gemeinsamer Treffpunkt aller Teilnehmerinnen ist immer Montag früh um 8.15 Uhr im Seminarraum SR 15.03, (Universitätsstraße 15, Erdgeschoß), Karl- Franzens-Universität.</span></span></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Kosten:</span></span></b></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Pro Woche fällt eine Verpflegungspauschale in der Höhe von 45,00 € an. Dieser Beitrag wird in bar jeweils am Montag in der Früh, am allgemeinen Treffpunkt SR 15.03, für die laufende Woche eingehoben. Er inkludiert Frühstück, Jause, Mittagessen und Getränke.</span></span></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Erkrankung/Fernbleiben:</span></span></b></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Erkrankt ein Kind, oder ist es verhindert die Sommer- Kinder Uni Graz zu besuchen, so ist dies umgehend im KinderUniBüro bekannt zu geben. Den Betreuerinnen ist es nicht gestattet, Medikamente zu verabreichen. Bei Vorliegen einer Allergie bitten wir Sie, diese bekannt zu geben und entsprechende Notfallsmedikamente zur SommerKinderUni Graz mitzugeben.</span></span></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><b><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Übergabe und Abholung Ihres Kindes:</span></span></b></span></span></span></p>

                                        <p style="margin-top:12.0pt; margin-right:0cm; margin-bottom:12.0pt; margin-left:0cm; margin:0cm 0cm 0.0001pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Arial,sans-serif"><span lang="vi" style="font-family:&quot;Tahoma&quot;,sans-serif"><span style="color:#001a33">Die Eltern haben dafür zu sorgen, dass Jugendliche im Alter von 9 bis 15 Jahren von den Eltern selbst oder deren bevollmächtigten Vertretern ordnungsgemäß in die Obhut der Betreuerinnen der SommerkinderUni Graz übergeben und von dort wieder abgeholt werden. Alleiniges Nach-Hause-Gehen muss von den Eltern im Vorhinein mittels Unterschrift bestätigt werden.</span></span></span></span></span></p>
                                    </h3>
                                </div>
                                @for($i = 1; $i<=4; $i++) 
                                <div class="exam-item-question">
                                    <div class="d-flex flex-wrap exam-title-question align-items-center">
                                        <div class="exam-number-question">1.{{$i}}</div>
                                        <h3 class="exam-label-question">
                                            27 Eltern können schriftlich erklären, dass...
                                        </h3>
                                    </div>
                                    <div class="exam-option-question d-flex align-items-center overflow-hidden flex-wrap align-content-start">
                                        @for($i1 = 1; $i1<=3; $i1++)  
                                        <div class="exam-item-question w-100 d-block form-check mb-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                A. ihr
                                            </label>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection