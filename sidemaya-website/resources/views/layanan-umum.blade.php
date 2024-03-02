<html>
<body>
    <div class="header">Layanan Umum</div>
    <br>
    <div class="section">
        <div class="section-header">Surat Keterangan Usaha</div>
        <a href="../download/layanan-umum/Surat-Keterangan-Usaha.docx"> Unduh Template Surat Keterangan Usaha </a>
        <br>
        <div class="section-content">
        Isi formulir .... kemudian unggah
        </div>
        
        <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <input type="hidden" name="type" value="layanan-umum">
            <input type="hidden" name="doctype" value="surat-keterangan-usaha">
            <textarea name="description" placeholder="Catatan"></textarea>
            <button type="submit">Unggah</button>
        </form>
    </div>
    <br>

    <div class="section">
        <div class="section-header">Surat Keterangan Usaha</div>
        <a href="../download/layanan-umum/Surat-Keterangan-Tidak-Mampu.doc"> Unduh Template Surat Keterangan Tidak Mampu </a>
        <br>
        <div class="section-content">
        Isi formulir .... kemudian unggah
        </div>
        
        <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <input type="hidden" name="type" value="layanan-umum">
            <input type="hidden" name="doctype" value="surat-keterangan-tidak-mampu">
            <textarea name="description" placeholder="Catatan"></textarea>
            <button type="submit">Unggah</button>
        </form>
    </div>
    <br>
</body>
</html>