<div class="col pt-3 pb-1">
                            <h5 class="ms-4">Form Jurnal Harian Ballas Co.</h5>
                            <hr>
<form method="post" action="{{ route('user.agenda.store') }}">
    {{ csrf_field() }}
    <div class="mb-3 me-4 ms-4 col">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name="name" placeholder="Nama"
            value="{{ $currentuser->name }}" readonly="readonly">
        <input type="text" class="form-control d-none" name="user_id"
            value="{{ $currentuser->id }}" readonly="readonly">
        <input type="text" class="form-control d-none" name="groups_id"
            value="{{ $currentuser->groups_id }}" readonly="readonly">


        <label for="disabledSelect" class="form-label">Group</label>
        <select id="disabledSelect" class="form-select" name="group_name" tabindex="-1"
            readonly required>

            @foreach ($usergroup as $g)
                <option>{{ $g->groups->group_name }}</option>
            @endforeach


        </select>


    </div>
    <div class="mb-3 me-4 ms-4 col">
        <label for="disabledSelect" class="form-label">Waktu Kerja</label>
        <select id="disabledSelect" class="form-select" name="waktu" required>
            <option>--Pilih Waktu--</option>
            <option>08.00 - 16.00</option>
            <option>08.00 - 13.00</option>
        </select>
    </div>
    <div class="mb-3  me-4 ms-4">
        <label class="form-label">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" required>
    </div>
    <div class="mb-3 me-4 ms-4">
        <label class="form-label">Kegiatan</label>
        <textarea class="form-control" id="floatingTextarea2" style="height: 50px" name="kegiatan" maxlength="256"
            placeholder="Kegiatan (max. 256 karakter)" required></textarea>
    </div>
    <div class="mb-3 me-4 ms-4 d-flex flex-row-reverse gap-2">

        <a href="/dashboard"><button class="btn btn-outline-secondary register"
                type="button">Kembali</button></a>
        <button id="register-button" type="submit" class="btn btn-primary register"
            >Kirim</button>
    </div>
</form>
</div>
