package com.test.spring.sevice;

import com.test.spring.entity.Lokasi;
import com.test.spring.entity.Proyek;

import java.util.List;

public interface LokasiService {
    void addLokasi(Lokasi lokasi);

    List<Lokasi> getLokasi();

    Lokasi getlokasii(Integer id);

    void updateLokasi(Integer id, Lokasi lokasi);

    void deleteLokasi(Integer id);
}
