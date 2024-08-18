package com.test.spring.entity;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.Id;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import java.time.LocalDateTime;

@Data
@Entity
@NoArgsConstructor
@AllArgsConstructor
public class Lokasi {

    @Id
    @GeneratedValue
    private Integer id;
    private String namaLokasi;
    private String negara;
    private String provinsi;
    private String kota;
    private LocalDateTime createdAt;
}
