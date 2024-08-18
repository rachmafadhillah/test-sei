package com.test.spring.entity;


import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.Id;
import lombok.*;

import java.time.LocalDate;
import java.time.LocalDateTime;

@Data
@Entity
@NoArgsConstructor
@AllArgsConstructor
public class Proyek {

    @Id
    @GeneratedValue
    private Integer id;
    private String namaProyek;
    private String client;
    private LocalDate tglMulai;
    private LocalDate tglSelesai;
    private String pimpinanProyek;
    private String keterangan;
    private LocalDateTime createdAt;
}
