package com.test.spring.repository;

import com.test.spring.entity.Proyek;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProyekRepository extends JpaRepository<Proyek, Integer> {

}
