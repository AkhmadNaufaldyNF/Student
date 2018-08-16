-- 
-- TABLE: jurusan 
--

CREATE TABLE jurusan(
    idjurusan       INTEGER		NOT NULL 	AUTO_INCREMENT,
    deskripsi     	VARCHAR(36),
    PRIMARY KEY (idjurusan)
)ENGINE=INNODB
;

-- 
-- TABLE: siswa 
--

CREATE TABLE siswa(
    idsiswa      INTEGER    NOT NULL	AUTO_INCREMENT,
	idjurusan	 INTEGER,
	nis 		 VARCHAR(11),
	nama 		 VARCHAR(255),
    kelas		 VARCHAR(255),
    PRIMARY KEY (idsiswa)
)ENGINE=INNODB
;

-- 
-- TABLE: siswa 
--

ALTER TABLE siswa ADD CONSTRAINT Refpattern28 
    FOREIGN KEY (idjurusan)
    REFERENCES jurusan(idjurusan)
;


