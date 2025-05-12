package online.fredinfo.portfolio.controllers.api;

import online.fredinfo.portfolio.models.Project;
import org.springframework.http.ResponseEntity;
import java.util.List;

public interface ProjectApi {
    ResponseEntity<List<Project>> getAllProjects();
    ResponseEntity<Project> getProjectById(Long id);
    ResponseEntity<List<Project>> getProjectsByName(String name);
    ResponseEntity<List<Project>> getProjectsByStatus(String status);
    ResponseEntity<List<Project>> getProjectsByTech(String techName);
    ResponseEntity<List<Project>> getProjectsBySkill(String skillName);
    ResponseEntity<Project> createProject(Project project);
    ResponseEntity<Project> updateProject(Long id, Project project);
    ResponseEntity<Void> deleteProject(Long id);
} 