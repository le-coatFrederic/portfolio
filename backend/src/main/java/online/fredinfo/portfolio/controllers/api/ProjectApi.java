package online.fredinfo.portfolio.controllers.api;

import online.fredinfo.portfolio.dto.ProjectDetailDTO;
import online.fredinfo.portfolio.dto.ProjectFormDTO;
import org.springframework.http.ResponseEntity;
import java.util.List;

public interface ProjectApi {
    ResponseEntity<List<ProjectDetailDTO>> getAllProjects();
    ResponseEntity<ProjectDetailDTO> getProjectById(Long id);
    ResponseEntity<List<ProjectDetailDTO>> getProjectsByName(String name);
    ResponseEntity<List<ProjectDetailDTO>> getProjectsByStatus(String status);
    ResponseEntity<List<ProjectDetailDTO>> getProjectsByTech(String techName);
    ResponseEntity<List<ProjectDetailDTO>> getProjectsBySkill(String skillName);
    ResponseEntity<ProjectDetailDTO> createProject(ProjectFormDTO project);
    ResponseEntity<ProjectDetailDTO> updateProject(Long id, ProjectFormDTO project);
    ResponseEntity<Void> deleteProject(Long id);
} 