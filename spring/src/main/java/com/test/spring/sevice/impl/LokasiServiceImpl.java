package com.test.spring.sevice.impl;

import com.test.spring.entity.Lokasi;
import com.test.spring.repository.LokasiRepository;
import com.test.spring.sevice.LokasiService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Service;
import org.springframework.web.server.ResponseStatusException;
import java.util.List;

@Service
public class LokasiServiceImpl implements LokasiService {

    @Autowired
    private LokasiRepository lokasiRepository;

    @Override
    public void addLokasi(Lokasi lokasi) {
        lokasiRepository.save(lokasi);
    }

    @Override
    public List<Lokasi> getLokasi() {
        return lokasiRepository.findAll();
    }

    @Override
    public Lokasi getlokasii(Integer id) {
        Lokasi lokasi = lokasiRepository
                .findById(id)
                .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND, "Invalid lokasi Id:" + id));

        return lokasi;
    }

    @Override
    public void updateLokasi(Integer id, Lokasi lokasi) {
        lokasiRepository
                .findById(id)
                .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND, "Invalid lokasi Id:" + id));

        lokasi.setId(id);

        lokasiRepository.save(lokasi);
    }

    @Override
    public void deleteLokasi(Integer id) {
        Lokasi lokasi = lokasiRepository
                .findById(id).orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND, "Invalid lokasi Id:" + id));

        lokasiRepository.delete(lokasi);
    }
}
