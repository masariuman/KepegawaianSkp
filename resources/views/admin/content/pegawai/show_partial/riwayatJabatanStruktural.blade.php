<div class="text-center masariuman-titleTable">Data riwayat jabatan struktural</div>
@if ($ketersediaan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data riwayat jabatan struktural</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama Jabatan</th>
                    <th class="text-center">Unit Kerja</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jabatan_struktural as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama_jabatan}}</td>
                        <td class="text-center">{{$item->unit_kerja}}</td>
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
            $("#eselon").html(data.eselon);
            $("#namaJabatan").html(data.nama_jabatan);
            $("#unitKerja").html(data.unit_kerja);
            $("#tmtJabatan").html(data.tmt_jabatan);
            $("#nomorSk").html(data.nomor_sk);
            $("#tanggalSk").html(data.tanggal_sk);
            $("#pejabatPenandatanganSk").html(data.pejabat_penandatangan_sk);
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
                <img alt="" src="/iconModal/userCertificate.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data Riwayat Jabatan Struktural
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">ESELON</th>
                        <td id="eselon"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA JABATAN</th>
                        <td id="namaJabatan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">UNIT KERJA</th>
                        <td id="unitKerja"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TMT JABATAN</th>
                        <td id="tmtJabatan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NOMOR SK</th>
                        <td id="nomorSk"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL SK</th>
                        <td id="tanggalSk"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PEJABAT PENANDATANGAN SK</th>
                        <td id="pejabatPenandatanganSk"></td>
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
