create view vjlhkrsmhs as
select
    `krs`.`matakuliah`.`kode_matakuliah` AS `Kode_Matakuliah`,
    `krs`.`matakuliah`.`nama_matakuliah` AS `Nama_Matakuliah`,
    count(`krs`.`matakuliah`.`SKS`) AS `SKS`
from (
        `krs`.`mahasiswa` `MHS`
        join `krs`.`krs` on(
            `MHS`.`StudentID` = `krs`.`krs`.`StudentID`
        )
    )
group by
    `MHS`.`StudentID`,
    `MHS`.`Nama`