package online.fredinfo.portfolio.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;
import online.fredinfo.portfolio.models.Image;
import java.util.Set;

@Repository
public interface ImageRepository extends JpaRepository<Image, Long> {
    Set<Image> findByProjectId(Long projectId);
} 