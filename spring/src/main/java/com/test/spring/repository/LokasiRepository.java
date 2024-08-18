package com.test.spring.repository;

import com.test.spring.entity.Lokasi;
import org.springframework.data.jpa.repository.JpaRepository;

public interface LokasiRepository extends JpaRepository<Lokasi, Integer> {
}
