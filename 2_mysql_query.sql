SELECT tb_mahasiswa.mhs_nama,tb_matakuliah.mk_kode,MAX(tb_mahasiswa_nilai.nilai) 
from tb_mahasiswa_nilai 
JOIN tb_mahasiswa on tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id 
JOIN tb_matakuliah on tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id
WHERE tb_matakuliah.mk_kode="MK303"