package online.fredinfo.portfolio.mappers;

import org.springframework.stereotype.Component;
import online.fredinfo.portfolio.models.Project;
import online.fredinfo.portfolio.dto.ProjectFormDTO;
import online.fredinfo.portfolio.dto.ProjectDetailDTO;
import online.fredinfo.portfolio.services.TechService;
import online.fredinfo.portfolio.services.SkillService;
import online.fredinfo.portfolio.services.ImageService;
import java.util.stream.Collectors;
import java.util.HashSet;

@Component
public class ProjectMapper {
    
    private final TechMapper techMapper;
    private final SkillMapper skillMapper;
    private final ImageMapper imageMapper;
    private final TechService techService;
    private final SkillService skillService;

    public ProjectMapper(TechMapper techMapper, SkillMapper skillMapper, ImageMapper imageMapper, 
            TechService techService, SkillService skillService, ImageService imageService) {
        this.techMapper = techMapper;
        this.skillMapper = skillMapper;
        this.imageMapper = imageMapper;
        this.techService = techService;
        this.skillService = skillService;
    }

    public Project toEntity(ProjectFormDTO dto) {
        Project project = new Project();
        project.setName(dto.name());
        project.setDescription(dto.description());
        project.setUrl(dto.url());
        project.setGithub(dto.github());
        project.setStatus(dto.status());
        project.setStartDate(dto.startDate());
        project.setEndDate(dto.endDate());
        project.setTechs(dto.techIds().stream()
            .map(id -> techService.getTechById(id).orElseThrow(() -> new RuntimeException("Tech not found")))
            .collect(Collectors.toSet()));
        project.setSkills(dto.skillIds().stream()
            .map(id -> skillService.getSkillById(id).orElseThrow(() -> new RuntimeException("Skill not found")))
            .collect(Collectors.toSet()));
        return project;
    }

    public ProjectDetailDTO toDTO(Project entity) {
        return new ProjectDetailDTO(
            entity.getId(),
            entity.getName(),
            entity.getDescription(),
            entity.getUrl(),
            entity.getGithub(),
            entity.getStatus(),
            entity.getStartDate(),
            entity.getEndDate(),
            entity.getTechs().stream()
                .map(techMapper::toDTO)
                .collect(Collectors.toSet()),
            entity.getSkills().stream()
                .map(skillMapper::toDTO)
                .collect(Collectors.toSet()),
            entity.getImages() != null ? entity.getImages().stream()
                .map(imageMapper::toDTO)
                .collect(Collectors.toSet()) : new HashSet<>()
        );
    }

    public void updateEntityFromDTO(ProjectFormDTO dto, Project entity) {
        if (dto.name() != null) entity.setName(dto.name());
        if (dto.description() != null) entity.setDescription(dto.description());
        if (dto.url() != null) entity.setUrl(dto.url());
        if (dto.github() != null) entity.setGithub(dto.github());
        if (dto.status() != null) entity.setStatus(dto.status());
        if (dto.startDate() != null) entity.setStartDate(dto.startDate());
        if (dto.endDate() != null) entity.setEndDate(dto.endDate());
    }
} 