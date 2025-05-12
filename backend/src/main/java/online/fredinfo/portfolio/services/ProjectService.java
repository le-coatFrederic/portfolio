package online.fredinfo.portfolio.services;

import online.fredinfo.portfolio.models.Project;
import java.util.List;
import java.util.Optional;

public interface ProjectService {
    List<Project> getAllProjects();
    Optional<Project> getProjectById(Long id);
    List<Project> getProjectsByName(String name);
    List<Project> getProjectsByStatus(String status);
    List<Project> getProjectsByTech(String techName);
    List<Project> getProjectsBySkill(String skillName);
    Project createProject(Project project);
    Project updateProject(Long id, Project project);
    void deleteProject(Long id);
} 