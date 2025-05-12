package online.fredinfo.portfolio.controllers.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import online.fredinfo.portfolio.controllers.api.ProjectApi;
import online.fredinfo.portfolio.models.Project;
import online.fredinfo.portfolio.services.ProjectService;

import java.util.List;

@RestController
@RequestMapping("/api/projects")
public class ProjectController implements ProjectApi {

    @Autowired
    private ProjectService projectService;

    @Override
    @GetMapping
    public ResponseEntity<List<Project>> getAllProjects() {
        return ResponseEntity.ok(projectService.getAllProjects());
    }

    @Override
    @GetMapping("/{id}")
    public ResponseEntity<Project> getProjectById(@PathVariable Long id) {
        return projectService.getProjectById(id)
                .map(ResponseEntity::ok)
                .orElse(ResponseEntity.notFound().build());
    }

    @Override
    @GetMapping("/search/name")
    public ResponseEntity<List<Project>> getProjectsByName(@RequestParam String name) {
        return ResponseEntity.ok(projectService.getProjectsByName(name));
    }

    @Override
    @GetMapping("/search/status")
    public ResponseEntity<List<Project>> getProjectsByStatus(@RequestParam String status) {
        return ResponseEntity.ok(projectService.getProjectsByStatus(status));
    }

    @Override
    @GetMapping("/search/tech")
    public ResponseEntity<List<Project>> getProjectsByTech(@RequestParam String techName) {
        return ResponseEntity.ok(projectService.getProjectsByTech(techName));
    }

    @Override
    @GetMapping("/search/skill")
    public ResponseEntity<List<Project>> getProjectsBySkill(@RequestParam String skillName) {
        return ResponseEntity.ok(projectService.getProjectsBySkill(skillName));
    }

    @Override
    @PostMapping
    public ResponseEntity<Project> createProject(@RequestBody Project project) {
        return ResponseEntity.ok(projectService.createProject(project));
    }

    @Override
    @PutMapping("/{id}")
    public ResponseEntity<Project> updateProject(@PathVariable Long id, @RequestBody Project project) {
        Project updatedProject = projectService.updateProject(id, project);
        if (updatedProject != null) {
            return ResponseEntity.ok(updatedProject);
        }
        return ResponseEntity.notFound().build();
    }

    @Override
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProject(@PathVariable Long id) {
        projectService.deleteProject(id);
        return ResponseEntity.ok().build();
    }
} 