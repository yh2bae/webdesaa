$.get(baseURL + "/anggaran-realisasi-cart", {'tahun': $("#tahun-apbdes").val()}, function (response) {
    anggaran_realisasi_cart(response);
});

$("#tahun-apbdes").change(function () {
    $("#loading-tahun").css('display','');
    $("#tahun-apbdes").css('display','none');
    $.get(baseURL + "/anggaran-realisasi-cart", {'tahun': $(this).val()}, function (response) {
        $("#tahun-apbdes").css('display','');
        $("#loading-tahun").css('display','none');
        anggaran_realisasi_cart(response);
    });
});

function progressBar(response) {
    return `
        <div class="progress-wrapper">
            <div class="progress-info">
                <div class="progress-label mt-2">
                    <div class="card" style="border:1px solid #2196f3; background:transparent; color:#2196f3;">
                    <span class="px-2 py-2"> ${response.rincian} </span>
                    </div>
                    </div>
                    <span class="badge outline-badge-info badge-pills mt-2">${response.uang}</span>
                </div>
                
            </div>
            <div class="progress mt-2">
                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width:${response.persen}%" aria-valuenow="${response.persen}" aria-valuemin="0" aria-valuemax="100"><span>${response.persen}%</span></div>
            </div>
        </div>
    `;
}

function anggaran_realisasi_cart (response) {
    $("#pendapatan-uang").html(response.pendapatan.uang);
    $("#pendapatan-persen").html(response.pendapatan.persen + "%");
    $("#pendapatan-value").attr('aria-valuenow',response.pendapatan.persen);
    $("#pendapatan-value").css('width', response.pendapatan.persen + "%");
    $("#pendapatan-badge").html('');

    $("#belanja-uang").html(response.belanja.uang);
    $("#belanja-persen").html(response.belanja.persen + "%");
    $("#belanja-value").attr('aria-valuenow',response.belanja.persen);
    $("#belanja-value").css('width', response.belanja.persen + "%");
    $("#belanja-wrapper").html('');

    $("#pembiayaan-uang").html(response.pembiayaan.uang);
    $("#pembiayaan-persen").html(response.pembiayaan.persen + "%");
    $("#pembiayaan-value").attr('aria-valuenow',response.pembiayaan.persen);
    $("#pembiayaan-value").css('width', response.pembiayaan.persen + "%");
    $("#pembiayaan-wrapper").html('');

    try {
        response.detail.forEach(element => {
            if (element.jenis == 4) {
                $("#pendapatan-wrapper").parent().css('display','');
                $("#pendapatan-wrapper").append(progressBar(element));
            } else if (element.jenis == 5) {
                $("#belanja-wrapper").parent().css('display','');
                $("#belanja-wrapper").append(progressBar(element));
            } else {
                $("#pembiayaan-wrapper").parent().css('display','');
                $("#pembiayaan-wrapper").append(progressBar(element));
            }
        });
    } catch (error) {}
}
