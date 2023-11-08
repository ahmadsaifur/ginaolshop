<div class="contact_bg_box" style="background-color: aquamarine;">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Masukan Alamat Lengkap Anda
            </h2>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <form class="form" method="post" action="<?= base_url('produk/kirimemail/') . $produk->id ?>">
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <input type="text" placeholder="Nama Lengkap" name="fullname">
                                    <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div>
                                    <textarea type="text" placeholder="Alamat Lengkap Beserta Kode Pos" name="alamat" id="alamat"></textarea>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div>
                                    <input type="text" id="phonenumber" placeholder="No Telepon (62)" name="phonenumber" onkeypress="return hanyaAngka(event)">

                                    <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="">
                                    <input type="text" readonly placeholder="Message" class="message_input" name="produk" value="<?= $produk->title ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" readonly placeholder="Message" class="message_input" name="harga_promo" value='Rp <?= number_format($produk->harga_promo, '0', '.', ',') ?>'>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="number" placeholder="banyaknya" class="message_input" name="banyaknya" id="banyaknya" value=''>
                                                <?= form_error('banyaknya', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" placeholder="totalnya" class="message_input" readonly name="harga_total" value='' id="totalnya">
                                                <?= form_error('harga_total', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-box ">
                                    <button type="submit" class="btn-block btn-warning" name="submit">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }
        $('#banyaknya').keyup(function(e) {
            e.preventDefault();
            var id = $(this).val();
            var harga_produk = "<?= $produk->harga_promo ?>";

            var totalnya = id * harga_produk;
            $('#totalnya').val(totalnya);
        })
    })
</script>