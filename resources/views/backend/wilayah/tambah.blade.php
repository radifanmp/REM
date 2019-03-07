<section>
    
    <h1>TAMBAH DATA WILAYAH</h1>
    <form action="/backend/wilayah/tambah/proses" method="post">
        @csrf
        <label for="nama_wilayah">Nama Wilayah</label>
        <input type="text" name="nama_wilayah" id="nama_wilayah">

        <label for="type">Tipe</label>
        <select name="type" id="type">
            <option value="Provinsi">Provinsi</option>
            <option value="Kabupaten">Kabupaten</option>
        </select>

        <label for="provinsi_id">Provinsi</label>
        <select name="provinsi_id" id="provinsi_id">
            <option value="0">--PILIH--</option>
            @foreach ($listProvinsi as $wilayah)
                <option value="{{$wilayah->id}}">{{$wilayah->nama_wilayah}}</option>
            @endforeach
        </select>

        <button type="submit">Simpan</button>
    </form>

</section>