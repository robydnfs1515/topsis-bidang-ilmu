<?php
// koneksi databas
$db = mysqli_connect("localhost", "root", "", "dbskripsi");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_admin($data)
{
    global $db;
    $nama_admin = htmlspecialchars($data["NAMA_ADMIN"]);
    $username_admin = htmlspecialchars($data["USERNAME_ADMIN"]);
    $password_admin = htmlspecialchars($data["PASSWORD_ADMIN"]);

    $query = "INSERT INTO users VALUES ('', '$nama_admin', '$username_admin', '$password_admin')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_mhs($data)
{
    global $db;
    $nama_mhs = htmlspecialchars($data["NAMA_MHS"]);
    $nim_mhs = htmlspecialchars($data["NIM_MHS"]);
    $angkatan_mhs = htmlspecialchars($data["ANGKATAN_MHS"]);
    $prodi_mhs = htmlspecialchars($data["PRODI_MHS"]);

    $query = "INSERT INTO mahasiswa VALUES ('', '$nama_mhs', '$nim_mhs', '$angkatan_mhs', '$prodi_mhs')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_krt($data)
{
    global $db;
    $nama_krt = htmlspecialchars($data["NAMA_KRITERIA"]);
    $bobot_krt = htmlspecialchars($data["BOBOT_KRITERIA"]);
    $status_krt = htmlspecialchars($data["STATUS_KRITERIA"]);
    $keterangan_krt = htmlspecialchars($data["KETERANGAN_KRITERIA"]);

    $query = "INSERT INTO kriteria VALUES ('','$nama_krt','$bobot_krt','$status_krt','$keterangan_krt')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_alt($data)
{
    global $db;
    $nama_alt = htmlspecialchars($data["NAMA_ALTERNATIF"]);
    $keterangan_alt = htmlspecialchars($data["KETERANGAN_ALTERNATIF"]);

    $query = "INSERT INTO alternatif VALUES ('','$nama_alt','$keterangan_alt')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_matriks($data)
{

    global $db;
    $id_mhs = $data['ID_MHS'];
    $msatu_satu = $data["MSATU_SATU"];
    $msatu_dua = $data["MSATU_DUA"];
    $msatu_tiga = $data["MSATU_TIGA"];
    $msatu_empat = $data["MSATU_EMPAT"];

    $query = "INSERT INTO matriks_satu VALUES ('','$id_mhs','$msatu_satu','$msatu_dua','$msatu_tiga','$msatu_empat')";
    mysqli_query($db, $query);

    $matriks21 = $data['MDUA_SATU'];
    $matriks22 = $data['MDUA_DUA'];
    $matriks23 = $data['MDUA_TIGA'];
    $matriks24 = $data['MDUA_EMPAT'];

    $query = "INSERT INTO matriks_dua VALUES ('','$id_mhs','$matriks21','$matriks22','$matriks23','$matriks24')";
    mysqli_query($db, $query);

    $matriks31 = $data['MTIGA_SATU'];
    $matriks32 = $data['MTIGA_DUA'];
    $matriks33 = $data['MTIGA_TIGA'];
    $matriks34 = $data['MTIGA_EMPAT'];

    $query = "INSERT INTO matriks_tiga VALUES ('','$id_mhs','$matriks31','$matriks32','$matriks33','$matriks34')";
    mysqli_query($db, $query);

    $matriks41 = $data['MEMPAT_SATU'];
    $matriks42 = $data['MEMPAT_DUA'];
    $matriks43 = $data['MEMPAT_TIGA'];
    $matriks44 = $data['MEMPAT_EMPAT'];

    $query = "INSERT INTO matriks_empat VALUES ('','$id_mhs','$matriks41','$matriks42','$matriks43','$matriks44')";
    mysqli_query($db, $query);

    $matriks51 = $data['MLIMA_SATU'];
    $matriks52 = $data['MLIMA_DUA'];
    $matriks53 = $data['MLIMA_TIGA'];
    $matriks54 = $data['MLIMA_EMPAT'];

    $query = "INSERT INTO matriks_lima VALUES ('','$id_mhs','$matriks51','$matriks52','$matriks53','$matriks54')";
    mysqli_query($db, $query);

}

function tambah_satu($data)
{
    global $db;
    $id_mhs = $data['ID_MHS'];
    $msatu_satu = $data["MSATU_SATU"];
    $msatu_dua = $data["MSATU_DUA"];
    $msatu_tiga = $data["MSATU_TIGA"];
    $msatu_empat = $data["MSATU_EMPAT"];

    $query = "INSERT INTO matriks_satu VALUES ('','$id_mhs','$msatu_satu','$msatu_dua','$msatu_tiga','$msatu_empat')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_dua($data)
{
    global $db;
    $id_mhs = $data['ID_MHS'];
    $matriks21 = $data['MDUA_SATU'];
    $matriks22 = $data['MDUA_DUA'];
    $matriks23 = $data['MDUA_TIGA'];
    $matriks24 = $data['MDUA_EMPAT'];

    $query = "INSERT INTO matriks_dua VALUES ('','$id_mhs','$matriks21','$matriks22','$matriks23','$matriks24')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_tiga($data)
{
    global $db;
    $id_mhs = $data['ID_MHS'];
    $matriks31 = $data['MTIGA_SATU'];
    $matriks32 = $data['MTIGA_DUA'];
    $matriks33 = $data['MTIGA_TIGA'];
    $matriks34 = $data['MTIGA_EMPAT'];

    $query = "INSERT INTO matriks_tiga VALUES ('','$id_mhs','$matriks31','$matriks32','$matriks33','$matriks34')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_empat($data)
{
    global $db;
    $id_mhs = $data['ID_MHS'];
    $matriks41 = $data['MEMPAT_SATU'];
    $matriks42 = $data['MEMPAT_DUA'];
    $matriks43 = $data['MEMPAT_TIGA'];
    $matriks44 = $data['MEMPAT_EMPAT'];

    $query = "INSERT INTO matriks_empat VALUES ('','$id_mhs','$matriks41','$matriks42','$matriks43','$matriks44')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambah_lima($data)
{
    global $db;
    $id_mhs = $data['ID_MHS'];
    $matriks51 = $data['MLIMA_SATU'];
    $matriks52 = $data['MLIMA_DUA'];
    $matriks53 = $data['MLIMA_TIGA'];
    $matriks54 = $data['MLIMA_EMPAT'];

    $query = "INSERT INTO matriks_lima VALUES ('','$id_mhs','$matriks51','$matriks52','$matriks53','$matriks54')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete_mhs($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE ID_MHS = $id");

    return mysqli_affected_rows($db);
}

function delete_krt($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM kriteria WHERE ID_KRITERIA = $id");

    return mysqli_affected_rows($db);
}

function delete_alt($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM alternatif WHERE ID_ALTERNATIF = $id");

    return mysqli_affected_rows($db);
}

function ubah_mhs($data)
{
    global $db;
    $id_mhs = $data["ID_MHS"];
    $nama_mhs = htmlspecialchars($data["NAMA_MHS"]);
    $nim_mhs = htmlspecialchars($data["NIM_MHS"]);
    $angkatan_mhs = htmlspecialchars($data["ANGKATAN_MHS"]);
    $prodi_mhs = htmlspecialchars($data["PRODI_MHS"]);

    $query = "UPDATE mahasiswa SET
        NAMA_MHS = '$nama_mhs',
        NIM_MHS = '$nim_mhs',
        ANGKATAN_MHS = '$angkatan_mhs',
        PRODI_MHS = '$prodi_mhs'
    WHERE ID_MHS = $id_mhs
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

function ubah_krt($data){
    global $db;
    $id_krt = $data["ID_KRITERIA"];
    $nama_krt = htmlspecialchars($data["NAMA_KRITERIA"]);
    $bobot_krt = htmlspecialchars($data["BOBOT_KRITERIA"]);
    $status_krt = htmlspecialchars($data["STATUS_KRITERIA"]);
    $keterangan_krt = htmlspecialchars($data["KETERANGAN_KRITERIA"]);

    $query = "UPDATE kriteria SET
        NAMA_KRITERIA = '$nama_krt',
        BOBOT_KRITERIA = '$bobot_krt',
        STATUS_KRITERIA = '$status_krt',
        KETERANGAN_KRITERIA = '$keterangan_krt'
    WHERE ID_KRITERIA = $id_krt
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function ubah_alt($data){
    global $db;
    $id_alt = $data["ID_ALTERNATIF"];
    $nama_alt = htmlspecialchars($data["NAMA_ALTERNATIF"]);
    $keterangan_alt = htmlspecialchars($data["KETERANGAN_ALTERNATIF"]);

    $query = "UPDATE alternatif SET
        NAMA_ALTERNATIF = '$nama_alt',
        KETERANGAN_ALTERNATIF = '$keterangan_alt'
    WHERE ID_ALTERNATIF = $id_alt
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function ubah_user($data){
    global $db;
    $id_usr = $data["ID_USERS"];
    $nama_usr = htmlspecialchars($data["NAMA_USERS"]);
    $username_usr = htmlspecialchars($data["USERNAME_USERS"]);
    $password_usr = htmlspecialchars($data["PASSWORD_USERS"]);

    $query = "UPDATE users SET
        NAMA_USERS = '$nama_usr',
        USERNAME_USERS = '$username_usr',
        PASSWORD_USERS = '$password_usr'
    WHERE ID_USERS = $id_usr
    ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}