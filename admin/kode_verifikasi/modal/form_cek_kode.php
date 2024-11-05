<!--modal-->
<div class="modal fade" id="modalkode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM CEK KODE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="index.php?p=cek_kode" method="post" class="modal-content modal-body border-0 p-0" enctype="multipart/form-data">
                        <div class="input-group mb-2">
                            <input  class="form-control" type="text" name="nama"  placeholder="Nama Lengkap" required>
                        </div>
                        <div class="input-group mb-2">
                            <input  class="form-control" type="text" name="nim" placeholder="NIM" required>
                        </div>                   
                        <button type="submit" name="cek" class="btn btn-success">Cek Kode</button>
                    </form>
                </div>

            </div>
        </div>
    </div>