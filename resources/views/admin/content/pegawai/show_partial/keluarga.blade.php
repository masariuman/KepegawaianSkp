<div class="text-center masariuman-titleTable">Data keluarga kandung</div>
@if ($ketersediaanKandung === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data keluarga kandung</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Hubungan</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluarga_kandung as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->hubungan}}</td>
                        <td class="text-center">{{$item->pekerjaan}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info modalTrigger" title="Lihat Data" data="{{$item}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

<hr />

<div class="text-center masariuman-titleTable">Data keluarga {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}</div>
@if ($ketersediaanPasangan === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data keluarga {{ $pegawai->jenis_kelamin === 'W' ? 'Suami' : 'Istri' }}</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Hubungan</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluarga_istri_suami as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->hubungan}}</td>
                        <td class="text-center">{{$item->pekerjaan}}</td>
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
            $("#nama").html(data.nama);
            $("#hubungan").html(data.hubungan);
            $("#pekerjaan").html(data.pekerjaan);
            $("#tanggal_lahir").html(data.tanggal_lahir);
            $("#jenis_kelamin").html(data.jenis_kelamin);
            $("#kondisi").html(data.kondisi);
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
                <img alt="" src="/iconModal/family.png" width="200px">
              </div>
              <div class="onboarding-content with-gradient masariuman-width1000px">
                <h4 class="onboarding-title">
                    Detail Data Keluarga
                </h4>
                <div class="onboarding-text">
                    <table class="mb-0 table table-striped">
                        <tbody>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">NAMA</th>
                        <td id="nama"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">HUBUNGAN</th>
                        <td id="hubungan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">PEKERJAAN</th>
                        <td id="pekerjaan"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">TANGGAL LAHIR</th>
                        <td id="tanggal_lahir"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">JENIS KELAMIN</th>
                        <td id="jenis_kelamin"></td>
                        </tr>
                        <tr>
                        <th scope="row" class="masariuman-tdBgBlack">KONDISI</th>
                        <td id="kondisi"></td>
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
