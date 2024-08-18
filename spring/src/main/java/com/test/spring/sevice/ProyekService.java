package com.test.spring.sevice;

import com.test.spring.entity.Proyek;

import java.util.List;

public interface ProyekService {
    void addProyek(Proyek proyek);

    List<Proyek> getProyek();

    Proyek getProyeks(Integer id);

    void updateProyek(Integer id, Proyek proyek);

    void deleteProyek(Integer id);
}
