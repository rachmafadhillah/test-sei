package com.test.spring.sevice.impl;

import com.test.spring.entity.Proyek;
import com.test.spring.repository.ProyekRepository;
import com.test.spring.sevice.ProyekService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.stereotype.Service;
import org.springframework.web.server.ResponseStatusException;
import java.util.List;

@Service
public class ProyekServiceImpl implements ProyekService {

    @Autowired
    private ProyekRepository proyekRepository;

    @Override
    public void addProyek(Proyek proyek) {
        proyekRepository.save(proyek);
    }

    @Override
    public List<Proyek> getProyek() {
        return proyekRepository.findAll();
    }

    @Override
    public Proyek getProyeks(Integer id) {
        Proyek proyek = proyekRepository
                .findById(id)
                .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND, "Invalid proyek Id:" + id));

        return proyek;
    }


    @Override
    public void updateProyek(Integer id, Proyek proyek) {
        proyekRepository
                .findById(id)
                .orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND, "Invalid proyek Id:" + id));

        proyek.setId(id);

        proyekRepository.save(proyek);
    }

    @Override
    public void deleteProyek(Integer id) {
        Proyek proyek = proyekRepository
                .findById(id).orElseThrow(() -> new ResponseStatusException(HttpStatus.NOT_FOUND, "Invalid proyek Id:" + id));

        proyekRepository.delete(proyek);
    }
}
