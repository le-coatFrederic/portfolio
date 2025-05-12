package online.fredinfo.portfolio.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;
import online.fredinfo.portfolio.models.Tech;
import java.util.List;

@Repository
public interface TechRepository extends JpaRepository<Tech, Long> {
    List<Tech> findByNameContainingIgnoreCase(String name);
    List<Tech> findByProjectsId(Long projectId);
} 