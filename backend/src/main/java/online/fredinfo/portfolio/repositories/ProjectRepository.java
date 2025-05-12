package online.fredinfo.portfolio.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;
import online.fredinfo.portfolio.models.Project;
import java.util.List;

@Repository
public interface ProjectRepository extends JpaRepository<Project, Long> {
    List<Project> findByNameContainingIgnoreCase(String name);
    List<Project> findByStatus(String status);
    List<Project> findByTechsNameContainingIgnoreCase(String techName);
    List<Project> findBySkillsNameContainingIgnoreCase(String skillName);
}
