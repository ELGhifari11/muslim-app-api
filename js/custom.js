"use strict";

$(document).ready(function () {
    var selectedJuz = $('#juz-select').val();
    var selectedStartJuz = $('#juz-select').val();
    var selectedEndJuz = $('#juz-select2').val();

    // Array untuk menyimpan riwayat berdasarkan kategori
    var historyAudio = [];
    var historySuratAyat = [];
    var historyJuzPage = [];
    var historyArabic = [];
    var historyArti = [];

    // Flag untuk menandai apakah fetch pertama telah dilakukan
    var isFirstFetch = true;

    function fetchRandomAyat(juz) {
        $.ajax({
            url: 'https://elghifari.site/api/quran/ayat/acak/juz' + juz,
            method: 'GET',
            beforeSend: function () {
                $('#random-ayat-btn1, #random-ayat-btn2, #juz-select, #juz-select2, #ayat-arab, #ayat-arti, #no-ayat, #audio, #no-ayat-max, #no-surat, #nama-surat, #no-juz, #no-page').addClass('btn-progress');
            },
            success: function (response) {
                var data = response.data;
                var info = response.info;
                updateDisplay(info, data);
                if (!isFirstFetch) {
                    updateHistory(info, data);
                }
                isFirstFetch = false; // Set flag to false after first fetch
            },
            error: function () {
                $('#ayat-result').html('<p>Error retrieving data.</p>');
            },
            complete: function () {
                $('#random-ayat-btn1, #random-ayat-btn2, #juz-select, #juz-select2, #ayat-arab, #ayat-arti, #no-ayat, #audio, #no-ayat-max, #no-surat, #nama-surat, #no-juz, #no-page').removeClass('btn-progress');
            }
        });
    }

    function fetchRandomAyatByRange(startJuz, endJuz) {
        $.ajax({
            url: 'https://elghifari.site/api/quran/ayat/acak/juz/' + startJuz + '-' + endJuz,
            method: 'GET',
            beforeSend: function () {
                $('#random-ayat-btn1, #random-ayat-btn2, #juz-select, #juz-select2, #ayat-arab, #ayat-arti, #no-ayat, #audio, #no-ayat-max, #no-surat, #nama-surat, #no-juz, #no-page').addClass('btn-progress');
            },
            success: function (response) {
                var data = response.data;
                var info = response.info;
                updateDisplay(info, data);
                if (!isFirstFetch) {
                    updateHistory(info, data);
                }
                isFirstFetch = false; // Set flag to false after first fetch
            },
            error: function () {
                $('#ayat-result').html('<p>Error retrieving data.</p>');
            },
            complete: function () {
                $('#random-ayat-btn1, #random-ayat-btn2, #juz-select, #juz-select2, #ayat-arab, #ayat-arti, #no-ayat, #audio, #no-ayat-max, #no-surat, #nama-surat, #no-juz, #no-page').removeClass('btn-progress');
            }
        });
    }

    function updateDisplay(info, data) {
        $('#no-surat').html(`<h4>SURAT KE - ${info.surat.id}</h4>`);
        $('#nama-surat').html(`${info.surat.nama.id}`);
        $('#no-juz').html(`${data.juz}`);
        $('#no-page').html(`${data.page}`);
        $('#no-ayat').html(`${data.ayah}`);
        $('#no-ayat-max').html(`${info.surat.ayat_max}`);
        var audioHtml = `
        <div class="media-title mr-5 ">
        <audio id="ayat-audio" controls src="${data.audio}"></audio>
        </div>`;
        $('#audio').html(audioHtml);

        // Auto play audio jika toggle diaktifkan
        if ($('#toggle-audio').is(':checked')) {
            $('#ayat-audio')[0].play();
        }
        
        $('#ayat-arab').html(`${data.arab}`);
        $('#ayat-arti').html(`${data.text}`);
    }

    function updateHistory(info, data) {
        historyAudio.push(data.audio);
        historySuratAyat.push(`QS.${info.surat.id} : ${data.ayah}`);
        historyJuzPage.push(`J ${data.juz} - H ${data.page}`);
        historyArabic.push(data.arab);
        historyArti.push(data.text);

        displayHistory();
    }

    function displayHistory() {
        var audioHtml = '';
        var suratAyatHtml = '';
        var juzPageHtml = '';
        var arabicHtml = '';
        var artiHtml = '';

        for (var i = 0; i < historyAudio.length; i++) {
            audioHtml += `<h6 class="font-weight-normal " >( ${i + 1} ).<audio controls src="${historyAudio[i]}"></audio></h6>
            <div class="btn-group mb-4 col-12">
            <button class="btn btn-primary view-page-btn" data-index="${i}">
            <i class="fas fa-book"> </i>
            View
            </button>
            </div>
            `;
            suratAyatHtml += `<h6 class="font-weight-normal " > ( ${i + 1} ). ${historySuratAyat[i]}</h6>
            <div class="btn-group mb-4 col-12">
            <button class="btn btn-sm btn-primary view-page-btn" data-index="${i}">
            <i class="fas fa-book"> </i>
            View
            </button>
            </div>`;
            juzPageHtml += `<h6 class="font-weight-normal " > ( ${i + 1} ). ${historyJuzPage[i]}</h6>
            <div class="btn-group mb-4 col-12">
            <button class="btn btn-sm btn-primary view-page-btn" data-index="${i}">
            <i class="fas fa-book"> </i>
            View
            </button>
            </div>`;
            arabicHtml += ` <h6 class="lateef-arabic-riwayat font-weight-normal mr-3 ">( ${i + 1} ). ${historyArabic[i]} </h6>
            <div class="btn-group mb-4 col-12">
            <button class="btn btn-sm btn-primary view-page-btn" data-index="${i}">
            <i class="fas fa-book"> </i>
            View
            </button>
            </div>`;
            artiHtml += `<h6 class="font-weight-normal "> ( ${i + 1} ).${historyArti[i]}</h6> <br>
            <div class="btn-group mb-4 col-12">
            <button class="btn btn-sm btn-primary view-page-btn" data-index="${i}">
            <i class="fas fa-book"> </i>
            View
            </button>
            </div>`;
        }

        $('#id-audio').html(audioHtml);
        $('#id-sa').html(suratAyatHtml);
        $('#id-jh').html(juzPageHtml);
        $('#id-arabic').html(arabicHtml);
        $('#id-arti').html(artiHtml);
        $('#history-count').text(historyAudio.length);

        // Tambahkan event listener untuk tombol "View Page"
        $('.view-page-btn').on('click', function () {
            var index = $(this).data('index');
            var suratAyat = historySuratAyat[index];
            var suratHalaman = historyJuzPage[index];

            // Mendapatkan nilai no-surat dan no-halaman dari teks QS.surat
            var noSurat = suratAyat.split(' : ')[0].replace('QS.', ''); // Menghapus teks "QS."
            var noHalaman = suratHalaman.split(' - ')[1].replace('H', '').trim(); // Menghapus teks "H" dan spasi ekstra

            // Membentuk URL dengan nilai no-surat dan no-halaman
            var url = `https://quran.kemenag.go.id/quran/per-halaman/surah/${noSurat}?page=${noHalaman}`;

            // Membuka URL di tab baru
            window.open(url, '_blank');

            console.log(url);
        });

    }


    // Update history functions to include buttons
    function updateHistory(info, data) {
        historyAudio.push(data.audio);
        historySuratAyat.push(`QS.${info.surat.id} : ${data.ayah}`);
        historyJuzPage.push(`J ${data.juz} - H ${data.page}`);
        historyArabic.push(data.arab);
        historyArti.push(data.text);

        displayHistory();
    }


    // Set default state
    $('#juz-select2, #sampai-text').hide();
    $('#juz-button').addClass('active');

    // Button click events
    $('#juz-button').click(function () {
        $(this).addClass('active');
        $('#range-juz-button').removeClass('active');
        $('#juz-select2, #sampai-text').hide();
    });

    $('#range-juz-button').click(function () {
        $(this).addClass('active');
        $('#juz-button').removeClass('active');
        $('#juz-select2, #sampai-text').show();
    });

    // Event listener untuk klik pada tombol view-page
    $('#view-page-button1, #view-page-button2, #view-page-button3').on('click', function () {
        // Mendapatkan nilai no-surat dan no-halaman dari elemen HTML
        var noSurat = $('#no-surat').text().replace('SURAT KE - ', ''); // Menghapus teks "SURAT KE - "
        var noHalaman = $('#no-page').text();

        // Membentuk URL dengan nilai no-surat dan no-halaman
        var url = `https://quran.kemenag.go.id/quran/per-halaman/surah/${noSurat}?page=${noHalaman}`;

        // Membuka URL di tab baru
        window.open(url, '_blank');
        console.log(url);

    });

    // Event listener untuk klik pada tombol
    $('#random-ayat-btn1, #random-ayat-btn2').on('click', function () {
        if ($('#range-juz-button').hasClass('active')) {
            fetchRandomAyatByRange(selectedStartJuz, selectedEndJuz);
        } else {
            fetchRandomAyat(selectedJuz);
        }
    });

    $('#juz-select').on('change', function () {
        selectedJuz = $(this).val();
        if ($('#range-juz-button').hasClass('active')) {
            selectedStartJuz = $(this).val();
        } else {
            fetchRandomAyat(selectedJuz);
        }
    });

    $('#juz-select2').on('change', function () {
        selectedEndJuz = $(this).val();
        if (selectedStartJuz && selectedEndJuz) {
            fetchRandomAyatByRange(selectedStartJuz, selectedEndJuz);
        }
    });

    // Inisialisasi default audio, namun tidak memasukkan hasilnya ke dalam riwayat
    fetchRandomAyat(selectedJuz);

});



