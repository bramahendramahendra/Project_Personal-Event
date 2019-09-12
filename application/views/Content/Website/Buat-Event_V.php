<!-- start form insert -->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="mb-30">Buatlah event </h3>
                    <!-- <h4 class="mb-30">Buatlah event </h4> -->
                    <form action="<?= site_url(); ?>Buat_Event/create_event" method="post">
                        <!-- Event     -->

                        <!-- Nama Event -->
                        <h4 class="mb-30">Event </h4>
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Nama Event</p>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="nama_event" placeholder="Nama Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Event'" class="single-input">
                                </div>
                            </div>
                        </div>

                        <!-- upload poter/banner/gambar -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>
                                        Upload Event  <br>
                                        Poster/Banner/Gambar
                                    </p>
                                </div>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="poster">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>                                    
                        </div>

                        <!-- Katageri -->
                        <!-- Katagero Event -->
                        <br>
                        <h4 class="mb-30">Kategori Event </h4>
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Kategori</p>
                                </div>
                                <div class="col-md-10">
                                    <select name="kategori_event" id="multi-select-condition" class="form-control">
                                        <option value="Bazaar" icon="multi-option-clavents-icon-bazaar">Bazaar</option>
                                        <option value="Job Fair" icon="multi-option-clavents-icon-job_fair">Job Fair</option>
                                        <option value="Lomba" icon="multi-option-clavents-icon-lomba">Lomba</option>
                                        <option value="Pameran" icon="multi-option-clavents-icon-pameran">Pameran</option>
                                        <option value="Seminar" icon="multi-option-clavents-icon-seminar">Seminar</option> 
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Jenis Event -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Jenis</p>
                                </div>
                                <div class="col-md-10">
                                    <div class="switch-wrap d-flex justify-content-reverse">
                                        <div class="primary-switch">
                                            <input type="checkbox" id="default-switch" value="Public" name="jenis_event">
                                            <label for="default-switch"></label>
                                        </div>
                                        <p style="padding-left: 10px">Public</p>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-reverse">
                                        <div class="primary-switch">
                                            <input type="checkbox" id="primary-switch" value="Private" name="jenis_event">
                                            <label for="primary-switch"></label>
                                        </div>
                                        <p style="padding-left: 10px">Private</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kapasitas -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Kapasitas</p>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="kapasitas" placeholder="Kapasitas" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kapasitas'" class="single-input">
                                </div>
                            </div>
                        </div>

                        <!-- Tanggal dan Jam -->
                        <!-- Start Tanggal Event -->
                        <br>
                        <h4 class="mb-30">Tanggal dan Jam Event </h4>
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Tanggal Mulai</p>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="tanggal" placeholder="Tanggal Mulai Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Mulai Event'" required class="single-input datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" >
                                </div>
                            <!-- </div>                                    
                        </div> -->

                        <!-- Start Jam Event -->
                        <!-- <div class="mt-10">
                            <div class="row"> -->
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Jam Mulai</p>
                                </div>
                                <div class="col-md-3">
                                    <input type="time" name="jam" placeholder="Jam Mulai Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jam Mulai Event'" required class="single-input">
                                </div>
                            </div>
                        </div>
                        
                        <!-- End Tanggal Event -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Tanggal Akhir</p>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="tanggal" placeholder="Tanggal Akhir Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Akhir Event'" required class="single-input datepicker-here" data-language='en' data-date-format="yyyy-mm-dd" >
                                </div>
                            <!-- </div>                                    
                        </div> -->

                        <!-- End Jam Event -->
                        <!-- <div class="mt-10">
                            <div class="row"> -->
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Jam Akhir</p>
                                </div>
                                <div class="col-md-3">
                                    <input type="time" name="jam" placeholder="Jam Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jam Akhir Event'" required class="single-input">
                                </div>
                            </div>
                        </div>


                        <!-- Alamat -->
                        <br>
                        <h4 class="mb-30">Alamat </h4>
                        
                        <!-- Nama Tempat Event -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Nama Tempat</p>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="lokasi" class="single-textarea" placeholder="Nama Tempat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Tempat'"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat Event -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Alamat</p>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="lokasi" class="single-textarea" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat Kota/Kabupaten Event -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Kota/Kabupaten</p>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="kapasitas" placeholder="Kota/Kabupaten" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kota/Kabupaten'" class="single-input">
                                </div>
                            </div>
                        </div>

                        <!-- Alamat Provinsi Event -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Provinsi</p>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="kapasitas" placeholder="Provinsi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Provinsi'" class="single-input">
                                </div>
                            </div>
                        </div>

                        <!-- Organisasi atau kepanitiaan -->
                        <br>
                        <h4 class="mb-30">Organisasi </h4>
                        <!-- upload logo organisasi -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>
                                        Upload <br>
                                        Logo Organisasi
                                    </p>
                                </div>
                                <div class="col-md-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="logo">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>                                    
                        </div>

                        <!-- Nama Orhanisasi -->
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Nama Organisasi</p>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="kapasitas" placeholder="Nama Organisasi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Organisasi'" class="single-input">
                                </div>
                            </div>
                        </div>

                        <!-- Tentang Event -->
                        <br>
                        <h4 class="mb-30">Tentang Event </h4>
                         <!-- Deskripsi Event -->
                         <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Deskripsi Event</p>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="lokasi" class="single-textarea" placeholder="Deskripsi Event" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi Event'"></textarea>
                                </div>
                            </div>
                        </div>
                         <!-- Syarat dan Ketentuan Event -->
                         <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Syarat dan Ketentuan</p>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="lokasi" class="single-textarea" placeholder="Syarat dan Ketentuan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Syarat dan Ketentuan'"></textarea>
                                </div>
                            </div>
                        </div>
                         <!-- Info dan Kontak Event -->
                         <div class="mt-10">
                            <div class="row">
                                <div class="col-md-2" style="text-align: right;" >
                                    <p>Info dan Kontak</p>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="lokasi" class="single-textarea" placeholder="Info dan Kontak" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Info dan Kontak'"></textarea>
                                </div>
                            </div>
                        </div>


                        

                        <div class="button-group-area mt-40">
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2" >
                                    <button class="genric-btn success circle arrow" type="submit">
                                        SUBMIT
                                        <span class="lnr lnr-arrow-right"></span>
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
<!-- end form insert -->