<div class="text-center masariuman-titleTable">data riwayat diklat teknis</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data Riwayat diklat teknis</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama Diklat</th>
                    <th class="text-center">Lokasi</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diklat_teknis as $no => $item)
                    <tr>
                        <th class="text-center">1</th>
                        <td class="text-center">{{$item->nama_diklat}}</td>
                        <td class="text-center">{{$item->lokasi}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info modalTrigger" title="Lihat Data" data="{{$item}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif


<script>
    $(document).ready(function() {
        $('.modalTrigger').on('click',function() {
            $('#showDetail').modal('show');
            var data = JSON.parse($(this).attr("data"));
            $("#namaDiklat").html(data.nama_diklat);
            $("#tempatBelajar").html(data.tempat_belajar);
            $("#lokasi").html(data.lokasi);
            $("#tanggalMulai").html(data.tanggal_mulai);
            $("#tanggalSelesai").html(data.tanggal_selesai);
            $("#jumlahJam").html(data.jumlah_jam);
            $("#Penyelenggara").html(data.penyelenggara);
        });
    });
</script>







{{-- modal --}}
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="showDetail" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered masariuman-maxWidth1300px" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-side-by-side">
              <div class="onboarding-media">
                <img alt="" src="/iconModal/bigicon3.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data Riwayat Diklat Teknis
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA DIKLAT</th>
                        <td id="namaDiklat"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TEMPAT BELAJAR</th>
                        <td id="tempatBelajar"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">LOKASI</th>
                        <td id="lokasi"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL MULAI</th>
                        <td id="tanggalMulai"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL SELESAI</th>
                        <td id="tanggalSelesai"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">JUMLAH JAM</th>
                        <td id="jumlahJam"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PENYELENGGARA</th>
                        <td id="Penyelenggara"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
{{-- end modal --}}

