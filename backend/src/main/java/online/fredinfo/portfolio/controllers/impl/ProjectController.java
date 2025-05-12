package online.fredinfo.portfolio.controllers.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import online.fredinfo.portfolio.controllers.api.ProjectApi;
import online.fredinfo.portfolio.dto.ProjectDetailDTO;
import online.fredinfo.portfolio.dto.ProjectFormDTO;
import online.fredinfo.portfolio.mappers.ProjectMapper;
import online.fredinfo.portfolio.models.Project;
import online.fredinfo.portfolio.services.ProjectService;

import java.util.ArrayList;
import java.util.List;

@RestController
@RequestMapping("/api/projects")
public class ProjectController implements ProjectApi {

    @Autowired
    private ProjectService projectService;
    @Autowired
    private ProjectMapper projectMapper;

    @Override
    @GetMapping
    public ResponseEntity<List<ProjectDetailDTO>> getAllProjects() {
        List<ProjectDetailDTO> projects = new ArrayList<>();
        this.projectService.getAllProjects().forEach(project -> {
            projects.add(this.projectMapper.toDTO(project));
        });
        
        return ResponseEntity.ok(projects);
    }

    @Override
    @GetMapping("/{id}")
    public ResponseEntity<ProjectDetailDTO> getProjectById(@PathVariable Long id) {
        return new ResponseEntity<>(this.projectMapper.toDTO(this.projectService.getProjectById(id).get()), HttpStatus.OK);
    }

    @Override
    @GetMapping("/search/name")
    public ResponseEntity<List<ProjectDetailDTO>> getProjectsByName(@RequestParam String name) {
        return ResponseEntity.ok(this.projectService.getProjectsByName(name).stream()
                .map(this.projectMapper::toDTO)
                .toList());
    }

    @Override
    @GetMapping("/search/status")
    public ResponseEntity<List<ProjectDetailDTO>> getProjectsByStatus(@RequestParam String status) {
        return ResponseEntity.ok(this.projectService.getProjectsByStatus(status).stream()
                .map(this.projectMapper::toDTO)
                .toList());
    }

    @Override
    @GetMapping("/search/tech")
    public ResponseEntity<List<ProjectDetailDTO>> getProjectsByTech(@RequestParam String techName) {
        return ResponseEntity.ok(this.projectService.getProjectsByTech(techName).stream()
                .map(this.projectMapper::toDTO)
                .toList());
    }

    @Override
    @GetMapping("/search/skill")
    public ResponseEntity<List<ProjectDetailDTO>> getProjectsBySkill(@RequestParam String skillName) {
        return ResponseEntity.ok(this.projectService.getProjectsBySkill(skillName).stream()
                .map(this.projectMapper::toDTO)
                .toList());
    }

    @Override
    @PostMapping
    public ResponseEntity<ProjectDetailDTO> createProject(@RequestBody ProjectFormDTO project) {
        Project projectEntity = this.projectMapper.toEntity(project);
        projectEntity = this.projectService.createProject(projectEntity);
        return new ResponseEntity<>(this.projectMapper.toDTO(projectEntity), HttpStatus.CREATED);
    }

    @Override
    @PutMapping("/{id}")
    public ResponseEntity<ProjectDetailDTO> updateProject(@PathVariable Long id, @RequestBody ProjectFormDTO project) {
        Project projectEntity = this.projectMapper.toEntity(project);
        Project updatedProject = this.projectService.updateProject(id, projectEntity);
        if (updatedProject != null) {
            return new ResponseEntity<>(this.projectMapper.toDTO(updatedProject), HttpStatus.OK);
        }
        return new ResponseEntity<>(HttpStatus.NOT_FOUND);
    }

    @Override
    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProject(@PathVariable Long id) {
        projectService.deleteProject(id);
        return ResponseEntity.ok().build();
    }
} 