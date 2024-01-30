<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?= $this->include('title') ?>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<?= $this->include('header') ?>

<!-- CONTENT -->
<main>
    <section id="qSection">

        <h1 id="q">Pertanyaan </h1>

        <div id="qContainer" class="bg-gray-100 rounded-[1rem] p-2 min-h-[5rem] py-2"></div>

        <div class="flex flex-row w-full items-center justify-center gap-x-2 mt-[1rem]">
            <button id="prevBtn" class="bg-gray-300 rounded-[1rem] p-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            </button>
            <div class="mx-2">
                <button onclick="handleNoBtnClick()" id="noBtn" class="bg-red-300 rounded-[1rem] w-[5rem] p-2">Tidak</button>
                <button onclick="handleYesBtnClick()" id="yesBtn" class="bg-green-300 rounded-[1rem] w-[5rem] p-2">Ya</button>
            </div>
            <button id="nextBtn" class="bg-gray-300 rounded-[1rem] p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
            <button>

        </div>

        <div class="flex flex-col w-full items-center justify-center gap-y-2 mt-[1rem]">
            <span id="isAllAnswered">Tombol Proses Akan Muncul Jika Semua Pertanyaan Dijawab </span>
            <button id="processBtn" class="bg-blue-300 rounded-[1rem] p-2 w-[18rem]" style="display: none;">Proses</button>
        </div>

    </section>

    <div id="resultSection" class="items-center justify-center">
        <section>
            <h2>Hasil Diagnosa :</h2>
            <div id="resultContainer"></div>
            <button onclick="handleResetBtnClick()" class="bg-red-300 rounded-[1rem] p-2 w-[18rem] mt-[1rem]">Konsultasi Lagi</button>
        </section>
    </div>
</main>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<?= $this->include('footer') ?>

<!-- SCRIPTS -->

<script>
    const gejala = [
        {
            code : "01",
            description: "tekanan darah sistolik lebih dari  140 mmHg"
        },
        {
            code : "02",
            description: "tekanan darah diastolik lebih dari 90 mmHg"
        },
        {
            code : "03",
            description: "tekanan darah sistolik lebih dari 160 mmHg"
        },
        {
            code : "04",
            description: "tekanan darah diastolik lebih dari 100 mmHg"
        },
        {
            code : "05",
            description: "sakit kepala"
        },
        {
            code : "06",
            description: "pendarahan di hidung"
        },
        {
            code : "07",
            description: "wajah kemerahan"
        },
        {
            code : "08",
            description: "mual dan muntah"
        },
        {
            code : "09",
            description: "kelelahan"
        },
        {
            code : "10",
            description: "jantung berdebar"
        },
        {
            code : "11",
            description: "sesak nafas"
        },
        {
            code : "12",
            description: "nyeri dada (angina)"
        },
        {
            code : "13",
            description: "nyeri dada (angina) dan tekanan darah tidak terkontrol"
        },
        {
            code : "14",
            description: "penurunan berat badan yang tidak dapat dijelaskan sebabnya"
        },
        {
            code : "15",
            description: "mata kabur"
        },
        {
            code : "16",
            description: "albuminuria (kencing berbusa atau berbuih)"
        },
        {
            code : "17",
            description: "rasa kebas di bagian sebelah tubuh"
        },
        {
            code : "18",
            description: "berbicara pelo"
        },
        {
            code : "19",
            description: "pusing seperti berputar"
        }
    ]

    const klasifikasi = [
        {
            code : "01",
            description: "hipertensi tingkat 1"
        },
        {
            code : "02",
            description: "hipertensi tingkat 2"
        },
        {
            code : "03",
            description: "hipertensi dengan indikasi penyakit khusus (gagal jantung)"
        },
        {
            code : "04",
            description: "hipertensi dengan indikasi penyakit khusus (paska infark miokard)"
        },
        {
            code : "05",
            description: "hipertensi dengan indikasi penyakit khusus (risiko tinggi penyakit jantung kronik)"
        },
        {
            code : "06",
            description: "hipertensi dengan indikasi penyakit khusus (diabetes melitus)"
        },
        {
            code : "07",
            description: "hipertensi dengan indikasi penyakit khusus (penyakit ginjal kronik)"
        },
        {
            code : "08",
            description: "hipertensi dengan indikasi penyakit khusus (cegah stroke berulang)"
        },
    ]

    const obat = [
        {
            code : "01",
            description: "diuretik"
        },
        {
            code : "02",
            description: "diuretik + ACEI/ARB/BB/CCB"
        },
        {
            code : "03",
            description: "ACEI (atau ARB apabila pasien intoleran dengan ACEI) + BB \n\n kombinasikan dengan aldosterone antagonists jika tekanan daarah belum turun"
        },
        {
            code : "04",
            description: "ACEI (atau ARB apabila pasien intoleran dengan ACEI) \n\n kombinasikan dengan BB jika tekanan daarah belum turun"
        },
        {
            code : "05",
            description: "BB \n\n jika angina dan tekanan darah tidak terkontrol gunakan CCB dihydropyridine atau CCB nondihydropyridine"
        },
        {
            code : "06",
            description: "ACEI + CCB / ARB + CCB \n\n jika memiliki penyakit arteri koroner gunakan BB"
        },
        {
            code : "07",
            description: "ACEI / ARB"
        },
        {
            code : "08",
            description: "ACEI / ARB + CCB"
        },
    ]

    const formula = [
        {
            klasifikasi : "01",
            gejala: "01,02,05,06,07",
            obat:"01"
        },
        {
            klasifikasi : "02",
            gejala: "03,04,05,08",
            obat:"02"
        },
        {
            klasifikasi : "03",
            gejala: "01,02,03,04,09,10,11",
            obat:"03"
        },
        {
            klasifikasi : "04",
            gejala: "01,02,03,04,12",
            obat:"04"
        },
        {
            klasifikasi : "05",
            gejala: "01,02,03,04,13",
            obat:"05"
        },
        {
            klasifikasi : "06",
            gejala: "01,02,03,04,10,14,15",
            obat:"06"
        },
        {
            klasifikasi : "07",
            gejala: "01,02,03,04,16",
            obat:"07"
        },
        {
            klasifikasi : "08",
            gejala: "01,02,03,04,17,18,19",
            obat:"08"
        },
    ]

    let resetAnswer = [null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null]
    let answer = [null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null]
    // let answer = [true,true,true/,true,true,true,true,true,true,true,true,false,false,false,false,false,false,false,false]

    let result = []

    let i = 0;

    $(document).ready(function() {
        initFunc()

        $("#prevBtn").click(function() {
            if (i > 0) handlePrevBtnClick()
        });

        $("#nextBtn").click(function() {
            if (i < 18) handleNextBtnClick()
        });

        $("#processBtn").click(function() {
            processingResult()
        });

    });

    function initFunc() {
        renderQuestionTitle()
        renderQuestion()
        $("#qSection").show();
        $("#resultSection").hide();
    }

    function processingResult() {
        if (answer[0] == true && answer[1] == true && answer[4] == true && answer[5] == true && answer[6] == true) result.push({k:1, t:1})

        if (answer[2] == true && answer[3] == true && answer[4] == true && answer[7] == true) result.push({k:2, t:2})
        
        if (answer[0] == true && answer[1] == true && answer[2] == true && answer[4] == true && answer[8] == true && answer[9] == true && answer[10] == true) result.push({k:3, t:3})
        
        if (answer[0] == true && answer[1] == true && answer[2] == true && answer[3] == true && answer[11] == true) result.push({k:4, t:4})
        
        if (answer[0] == true && answer[1] == true && answer[2] == true && answer[3] == true && answer[12] == true) result.push({k:5, t:5})
        
        if (answer[0] == true && answer[1] == true && answer[2] == true && answer[3] == true && answer[9] == true && answer[13] == true && answer[14] == true) result.push({k:6, t:6})

        if (answer[0] == true && answer[1] == true && answer[2] == true && answer[3] == true && answer[15] == true) result.push({k:7, t:7})

        if (answer[0] == true && answer[1] == true && answer[2] == true && answer[3] == true && answer[16] == true && answer[17] == true && answer[18] == true) result.push({k:8, t:8})

        renderResultTable()

        $("#resultSection").show();
        $("#qSection").hide();

    }

    function handleResetBtnClick() {
        i = 0
        result = []
        answer = resetAnswer
        initFunc()
        renderProcessBtn()
    }

    function handleYesBtnClick() {
        answer[i] = true
        if (i < 18) handleNextBtnClick()
        renderProcessBtn()
    }

    function handleNoBtnClick() {
        answer[i] = false
        if (i < 18) handleNextBtnClick()
        renderProcessBtn()
    }
    
    function handlePrevBtnClick() {
        i--
        renderQuestionTitle()
        renderQuestion()
        renderProcessBtn()
    }

    function handleNextBtnClick() {
        i++
        renderQuestionTitle()
        renderQuestion()
        renderProcessBtn()
    }

    function renderQuestionTitle() {
        $("#q").html(`Pertanyaan ${i+1}`)
    }

    function renderQuestion() {
        $("#qContainer").html(`Apakah ${gejala[i].description} ?`)
    }

    function renderProcessBtn() {
        if (answer.includes(null) == false) {
            $("#processBtn").show();
            $("#resetBtn").show();
            $("#isAllAnswered").hide();
        } else {
            $("#processBtn").hide();
            $("#resetBtn").hide();
            $("#isAllAnswered").show();
        }
        
    }

    function renderResultTable() {
        console.log("res", result)

        let resHtml = `<table id="table">`

        //print tr gejala
        resHtml += "<tr>"
        resHtml += "<td>"
        resHtml += "Gejala"
        resHtml += "</td>"
        resHtml += "<td>"
        for (let i = 0; i < answer.length; i++) {
            if (answer[i] == true) {
                resHtml += "<ul>"
                resHtml += `<li>${gejala[i].description}</li>`
                resHtml += "</ul>"
            }
        }
        resHtml += "</td>"
        resHtml += "</tr>"

        //print tr klasifikasi
        resHtml += "<tr>"
        resHtml += "<td>"
        resHtml += "Klasifikasi"
        resHtml += "</td>"
        resHtml += "<td>"
        for (const obj of result) {
            resHtml += "<ul>"
            resHtml += `<li>klasifikasi ${obj.k} : ${klasifikasi[obj.k - 1].description}</li>`
            resHtml += "</ul>"
        }
        resHtml += "</td>"
        resHtml += "</tr>"

        //print tr obat
        resHtml += "<tr>"
        resHtml += "<td>"
        resHtml += "Obat"
        resHtml += "</td>"
        resHtml += "<td>"
        for (const obj of result) {
            resHtml += "<ul>"
            resHtml += `<li>obat ${obj.k} : ${obat[obj.k - 1].description}</li>`
            resHtml += "</ul>"
        }
        resHtml += "</td>"
        resHtml += "</tr>"

        resHtml += "</table>"

        $("#resultContainer").html(resHtml)
    }
</script>

</body>
</html>
