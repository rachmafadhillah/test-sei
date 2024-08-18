package com.test.spring.controller;

import com.test.spring.entity.Proyek;
import com.test.spring.sevice.ProyekService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/proyek")
public class ProyekController {

    @Autowired
    private ProyekService proyekService;

    @PostMapping
    public String addProyek(@RequestBody Proyek proyek){
        proyekService.addProyek(proyek);

        return "success add proyek";
    }

    @GetMapping
    public List<Proyek> getProyek(){
        return proyekService.getProyek();
    }

    @GetMapping("/get")
    public Proyek getProyeks(@RequestParam Integer id) {
        return proyekService.getProyeks(id);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Void> updateProyek(@PathVariable Integer id, @RequestBody Proyek proyek) {
        proyekService.updateProyek(id, proyek);

        return ResponseEntity.noContent().build();
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProyek(@PathVariable Integer id){
        proyekService.deleteProyek(id);

        return ResponseEntity.noContent().build();
    }
}
