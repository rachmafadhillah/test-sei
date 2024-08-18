package com.test.spring.controller;

import com.test.spring.entity.Lokasi;
import com.test.spring.entity.Proyek;
import com.test.spring.sevice.LokasiService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/lokasi")
public class LokasiController {

    @Autowired
    private LokasiService lokasiService;

    @PostMapping
    public String addLokasi(@RequestBody Lokasi lokasi){
        lokasiService.addLokasi(lokasi);

        return "success add lokasi";
    }

    @GetMapping
    public List<Lokasi> getLokasi(){
        return lokasiService.getLokasi();

    }

    @GetMapping("/get")
    public Lokasi getLokasii(@RequestParam Integer id) {
        return lokasiService.getlokasii(id);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Void> updateLokasi(@PathVariable Integer id, @RequestBody Lokasi lokasi) {
        lokasiService.updateLokasi(id, lokasi);

        return ResponseEntity.noContent().build();
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteLokasi(@PathVariable Integer id){
        lokasiService.deleteLokasi(id);

        return ResponseEntity.noContent().build();
    }
}
