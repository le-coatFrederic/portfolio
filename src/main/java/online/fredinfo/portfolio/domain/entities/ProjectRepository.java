package online.fredinfo.portfolio.domain.entities;

import java.time.Duration;
import java.util.Date;
import java.util.List;
import java.util.UUID;

public interface ProjectRepository {
    public Project findById(UUID id);
    public Project save(Project project);
    public void delete(Project project);
    public void deleteById(UUID id);
    public List<Project> findAll();
    public List<Project> findByOwnerId(UUID ownerId);
    public List<Project> findByName(String name);
    public List<Project> findByCompanyId(UUID companyId);
    public List<Project> findAllWithStartingDateBefore(Date date);
    public List<Project> findAllWithStartingDateAfter(Date date);
    public List<Project> findAllWithEndingDateBefore(Date date);
    public List<Project> findAllWithEndingDateAfter(Date date);
    public List<Project> findAllWithDurationLessThan(Duration duration);
    public List<Project> findAllWithDurationGreaterThan(Duration duration);
    public List<Project> findAllWithDurationBetween(Duration duration1, Duration duration2);
    public List<Project> findAllWithSkills(List<Skill> skills);
}
